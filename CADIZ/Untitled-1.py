class Stack:
    def __init__(self):
        self.items = []
        
    def push(self, item):
        print("Pushed:")
        self.items.append(item)
        print(self.items)
        print()
    def pop(self):
        if self.items is None:
            print("Stack is empty.")
        else:
            print("Popped:")
            item = self.items.pop()
            print(item)
            print(self.items)
            print()
    def peek(self):
        if self.items is None:
            print("Stack is empty.")
        print("peeked:")
        a = self.items[-1]
        print(a)
        print()
    def size(self):
        print("Size:")
        print(len(self.items))
        print()
    def is_empty(self):
        return len(self.items) == 0 
    
stack = Stack()
stack.push(5)
stack.push(10)
stack.push(15)
stack.push(20)

stack.peek()

print("Elements inside before using pop operator [5,10,15,20]")
stack.pop()
stack.pop()

stack.size()
stack.is_empty()
