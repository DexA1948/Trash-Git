/*
// C++ program to demonstrate
// what happens when I pass const parameter to function with non-const arguments
#include <iostream>
using namespace std;

int foo(int* y)
{
    return *y;
}

// Driver code
int main()
{
    int z = 8;
    const int* x = &z;
    cout << foo(x);//this line will show CTE error
    return 0;
}
*/

/*
//Pointer variable pointing to a constant value
#include <iostream>
using namespace std;

int main()
{
    int x{ 10 };
    int z{ 11 };//what happens if we change the value of i in const int* i
    char y{ 'M' };

    const int* i = &x;
    const char* j = &y;

    //will this work?
    i = &z;
    //yes, because only *i cannot be changed for const int* i

    // Value of x and y can be altered,
    // they are not constant variables
    x = 9;
    y = 'A';

    // Change of constant values because,
    // i and j are pointing to const-int
    // & const-char type value
    // *i = 9;
    // *j = 7;

    cout << *i << " " << *j;
}
*/
/*
// C++ program to demonstrate the
// const pointer variable point to the value
#include <iostream>
using namespace std;

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
    *i = 10;
    *j = 'D';

    // CTE because pointer variable
    // is const type so the address
    // pointed by the pointer variables
    // can't be changed
    // *i = &z;
    // *j = &p;

    cout << *i << " and " << *j << endl;
    cout << i << " and " << j << endl;

    return 0;
}
*/

/*
//to check if I can do int const a= 10 just like const int a=10
#include<iostream>

using namespace std;

int main()
{
    int const a= 10;
    cout << a <<endl;
    a=111;
    cout << a <<endl;
}
*/

// C++ program to demonstrate the
// constant function
#include <iostream>
using namespace std;

// Class Test
class Test {
    int value;

public:
    // Constructor
    Test(int v = 0)
    {
        value = v;
    }

    // We get compiler error if we
    // add a line like "value = 100;"
    // in this function.
    int getValue() const
    {
        return value;
    }

    // a nonconst function trying to modify value
    void setValue (int val) {
        value = val;
    }
};

// Driver Code
int main()
{
    // Object of the class T
    Test t(20);

    // non-const object invoking const function, no error
    cout << t.getValue() << endl;

    const int a = t.getValue();//too see how to assign a const value returned by a function
    cout << a << endl;
    a = 100;//shows error
    cout << a << endl;

    // const object
      const Test t_const(10);

    // const object invoking const function, no error
    cout << t_const.getValue() << endl;

    // const object invoking non-const function, CTE
    // t_const.setValue(15);

    // non-const object invoking non-const function, no error
    t.setValue(12);

    cout << t.getValue() << endl;

    return 0;
}
