my_list = [12, 4, 56, 17, 8, 99, 23]
my_list .reverse()

def sort_list(my_list):
    my_list.sort()
    print(f"Sorted: {my_list}")
    
    
    
def reverse_list(my_list):
    my_list.reverse()
    print(f"Reversed: {my_list}")
    
def slice_list(my_list):
    my_list.sort()
    print(f"Sliced: {my_list[1:4]}")
    
    
def main():
    sort_list(my_list)
    reverse_list(my_list)
    slice_list(my_list)
    
    
main()



