#include<iostream>
#include"Learning1headerfile.h"

using namespace std;

/*
//Here I'm trying to learn about scope of static objects
//Destructor is called only at end of the main
class Abc
{
    int i;
    public:
    Abc()
    {
        i=0;
        cout << "constructor";
    }
    ~Abc()
    {
        cout << "destructor";
    }
};

void f()
{
    static Abc obj;
    printf("1 done");
    static Abc obj2;
}

int main()
{
    int x=0;
    if(x==0)
    {
        f();
    }
    cout << "END";
}
*/

int main()
{
    int a = return_int();
    cout<<a<<endl;
}
