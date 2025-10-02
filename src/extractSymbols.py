import ast
import sys
import json

class SymbolVisitor(ast.NodeVisitor):
    def __init__(self):
        self.symbols = {"functions": [], "classes": [], "imports": []}

    def visit_FunctionDef(self, node):
        self.symbols["functions"].append(node.name)
        self.generic_visit(node)

    def visit_ClassDef(self, node):
        self.symbols["classes"].append(node.name)
        self.generic_visit(node)

    def visit_Import(self, node):
        for alias in node.names:
            self.symbols["imports"].append(alias.name)
        self.generic_visit(node)

    def visit_ImportFrom(self, node):
        if node.module:
            for alias in node.names:
                self.symbols["imports"].append(f"{node.module}.{alias.name}")
        self.generic_visit(node)

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("Usage: python extract_symbols.py <python_file>")
        sys.exit(1)

    filename = sys.argv[1]
    with open(filename, "r", encoding="utf-8") as f:
        code = f.read()

    tree = ast.parse(code)
    visitor = SymbolVisitor()
    visitor.visit(tree)
    # symbol type normalization 
    symbol_list = []
    for symbol_type in visitor.symbols:
        for symbol in visitor.symbols[symbol_type]:
            symbol_list.append({"type": symbol_type,"symbol" :symbol})
    print(json.dumps(symbol_list, indent=2))
