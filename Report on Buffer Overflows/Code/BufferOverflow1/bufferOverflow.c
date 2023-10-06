#include <stdio.h>
#include <string.h>

//https://www.thegeekstuff.com/2013/06/buffer-overflow/
// function to compare the entered password with the correct password
int compare_pass(char *buff) 
{
    // check if the entered password matches the correct password
    // if the password doesn't match strcmp will return a non-zero which results in true
    if (strcmp(buff, "pass")) {
        printf ("\n Wrong Password \n");
        return 1;  // return 1 if password is incorrect
    }
    else {
        printf ("\n Correct Password \n");
        return 0;  // return 0 if password is correct
    }
}

int main()
{
    char buff[5];  // buffer for password input
    int password = 0;

    printf("\n Enter the password: ");
    gets(buff);  // read the password from the user and store in buffer

    // compare entered password with correct password 
    // if the return value from compare_pass is 0 set password to 1
    if(compare_pass(buff) == 0) { 
        password = 1;
    }

    // if password is correct, grant root or admin rights to user
    if(password > 0) {
        printf ("\n Root privileges given to the user \n");
    }
    return 0;
}