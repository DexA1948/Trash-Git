//8:00pm Baisakh19, mainly learning AI
//But also DSA and C++ in the process
//to tweet later
//i love sarbada chiyapatti
/*there is always much to learn and moment you feel like you now
know everything, sit back, relax and comeback and see again
don't get upset over there being much to learn because there
always will be just know something more in the next moment*/

#include<iostream>

using namespace std;

//here I'm learning use of 'const' keyword
/*
//constant variables
int main()
{
    const int a=10;

    scanf("%d",&a);

    printf("%d", a);
}
*/


//constant keyword with pointers

/*
//When the pointer variable point to a const value
// Driver Code
int main()
{
    int x{ 10 };
    int z{ 11 };
    char y{ 'M' };

    const int* i = &x;
    const char* j = &y;

    // Value of x and y can be altered,
    // they are not constant variables
    x = 9;
    y = 'A';

    i=&z;//to understand 'When the const pointer variable point to the value:'

    // Change of constant values because,
    // i and j are pointing to const-int
    // & const-char type value
    // *i = 6;
    // *j = 7;

    cout << *i << " " << *j;
}


/*
//checking out pointers here for lil extra info
int main()
{
    int *t;
    //int a;
    //t=&a;
    *t=6;//this won't work
    printf("%d",*t);
    //printf("%d",a);
}
*/

//When the const pointer variable point to the value
//what kinda bullshit is this
// Driver Code
int main()
{
    // x and z non-const var
    int x = 5;
    int z = 6;

    // y and p non-const var
    char y = 'A';
    char p = 'C';

    // const pointer(i) pointing
    // to the var x's location
    int* const i = &x;

    // const pointer(j) pointing
    // to the var y's location
    char* const j = &y;


    // The values that is stored at the memory location can modified
    // even if we modify it through the pointer itself
    // No CTE error
    // *i = 10;
    // *j = 'D';

    // CTE because pointer variable
    // is const type so the address
    // pointed by the pointer variables
    // can't be changed
    i = &z;
    j = &p;

    cout << *i << " and " << *j
        << endl;
    cout << i << " and " << j;

    return 0;
}

