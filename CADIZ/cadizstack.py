class Node:
    def __init__(self, value):
        self.value = value
        self.next = None
        
class Stack:
    def __init__(self):
        self.top = None
        self.size = 0
        
    def push(self, item):
        new_node = Node(item)
        new_node.next = self.top
        self.top = new_node
        self.size += 1
        
    def pop(self):
        if self.is_empty():
            raise IndexError("Pop Empty stack")
        popped_node = self.top
        self.top = popped_node.next
        self.size -= 1
        return popped_node.value
    
    def peek(self):
        if self.is_empty():
            raise IndexError("Peek Empty stack")
        return self.top.value
    
    def is_empty(self):
        return self.top is None
    
    def sizes(self):
        return self.size
    
stack = Stack()
elements = [7, 14, 21, 28]
for element in elements:
    stack.push(element)
print("Top element (peek):", stack.peek())
print("Popped elements:")
for _ in range(2):
    print(stack.pop())
print("New size of stack:", stack.sizes())        
        
