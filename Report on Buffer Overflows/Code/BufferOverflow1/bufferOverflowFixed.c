#include <stdio.h>
#include <string.h>
//Full comments are in bufferOverflow.c
//https://www.thegeekstuff.com/2013/06/buffer-overflow/

int compare_pass(char *buff) 
{
    if (strcmp(buff, "pass")) {
        printf ("\n Wrong Password \n");
        return 1;
    }
    else {
        printf ("\n Correct Password \n");
        return 0;
    }
}

int main()
{
    char buff[5]; 
    int password = 0;

    printf("\n Enter the password: ");
    // fgets is used instead of gets. fgets sets a limit on how many
    //characters are stored in buff and what input to get the data from
    fgets(buff, 5, stdin);

    if(compare_pass(buff) == 0) {
        password = 1;
    }

    if(password > 0) {
        printf ("\n Root privileges given to the user \n");
    }
    return 0;
}