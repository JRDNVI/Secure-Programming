#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main() {
    int small_num[3];  // declare an array of 3 integers
    int size;
    int *num;
    //get the amount of numbers the user wants to enter 
    printf("How many numbers do you want to enter: ");
    scanf("%d", &size);

    // using the size variable to dynamically allocate memory for num array
    num = malloc(size * sizeof(int));  
    if (num == NULL) {  // check if allocation failed
        printf("Memory allocation failed");
        return 1;
    }

    printf("Enter %d numbers: ", size);
    for (int i = 0; i < size; i++) {  // loop to add input values into num array
        scanf("%d", &num[i]);
    }

    // copy the num array to the small_num array and copy n amount of bytes.
    // This is where the overflow can occur, if the source array is bigger than 
    // the destination array this function will begin to access memory that is not 
    // allocated to the program. This happens because size is used to determine how 
    // bytes should be copied
    memcpy(small_num, num, size * sizeof(int));   

    // loop to print the elements of small_num
    for (int i = 0; i < size; i++) {  
        printf("%d ", small_num[i]);
    }

    free(num)
    return 0;
}