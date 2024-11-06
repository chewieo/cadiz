

arr= [10, 20, 30, 40, 50]
arr2 = []
def insert_element(arr, element):
    arr.append(element)
    print(f"Insert: {arr}")
def delete_element(arr, element):
    arr.remove(element)
    print(f"Delete: {arr}")
def print_allElements():
    for elements in arr:
        arr2.append(elements)
    print(f"Output: {arr2}")
    
def main():
    insert_element(arr, 60)
    delete_element(arr, 30)
    print_allElements()
    
main()


