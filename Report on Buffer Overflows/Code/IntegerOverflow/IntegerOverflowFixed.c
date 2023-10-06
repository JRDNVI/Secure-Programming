#include <stdio.h>
#include <stdlib.h>
#include <limits.h>

//full comments in IntegerOverflow.c

int main() {
  int num_items = 0;
  int item_price = 0;
  int total_price = 0;

  printf("Enter the number of items: ");
  scanf("%d", &num_items);

  printf("Enter the price per item: ");
  scanf("%d", &item_price);

  // This check works by dividing the max value an int can store by
  // the item_price and if num_items is greater than that value when they
  // are multiplied together it will result in an integer overflow.
  if (num_items > 2147483647 / item_price) {
    printf("Integer overflow detected!\n");
    return 1;
  }

  total_price = num_items * item_price;

  printf("Total price: %d\n", total_price);


  return 0;
}