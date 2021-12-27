/*Here I'm Learning About List and other STL's in C++
From a YouTube channel called CodeWithHarry*/

#include<iostream>
#include<list>

static int return_int()
{
    static int a =10;
    return a;
}

using namespace std;

void display(list<int> &lst)
{
    list<int>::iterator it;
    for(it=lst.begin(); it!=lst.end(); it++)
    {
        cout<<*it <<" ";
    }
    cout<<endl;
}

int main2()
{
    list<int> list1;

    list1.push_back(5);
    list1.push_back(7);
    list1.push_back(1);
    list1.push_back(9);
    list1.push_back(12);

    list<int>:: iterator iter;
    iter=list1.begin();

    display(list1);

    return 0;
}
