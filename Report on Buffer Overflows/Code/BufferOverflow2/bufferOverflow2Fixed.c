#include <stdio.h>
#include <string.h>
#include <stdlib.h>

// Full comments in bufferOverflow2.c

int main() {
    int size;
    int *num;
    int *arr2; // the small array is not being initialised with 3

    printf("How many numbers do you want to enter: ");
    scanf("%d", &size);
    
    //Now both of the arrays are being dynamically allocated memory
    // based on the users input size 
    num = malloc(size * sizeof(int));
	arr2 = malloc(size * sizeof(int));

    // Two checks are done to ensure the allocation didn't fail
    if (num == NULL || arr2 == NULL) {
        printf("Memory allocation failed");
        return 1;
    }

    printf("Enter %d numbers: ", size);
    for (int i = 0; i < size; i++) {
        scanf("%d", &num[i]);
    }

    // Now both arrays will always be the same size which means 
    // the overflow can't occur
    memcpy(arr2, num, size * sizeof(int));

    for (int i = 0; i < size; i++) {
        printf("%d ", arr2[i]);
    }

    free(num);
    free(arr2);
    return 0;
}