#include <stdio.h>
#include <stdlib.h>

int main() {
  int num_items = 0;
  int item_price = 0;
  int total_price = 0;

  // prompt the user to enter the number of items
  printf("Enter the number of items: ");

  // read the number of items from the user
  scanf("%d", &num_items);

  // prompt the user to enter the price per item
  printf("Enter the price per item: ");

  // read the price per item from the user
  scanf("%d", &item_price);

  // calculate the total price. This is where the integer overflow
  // can occur by not checking the result of the muliplcation. If the
  // value is over 2,147,483,647 the value will wrap around to negitive numbers
  total_price = num_items * item_price;

  // display the total price to the user
  printf("Total price: %d\n", total_price);

  return 0;
}