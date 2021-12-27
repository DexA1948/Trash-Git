//finally to STL
//talk less work hard

//VECTORS (C++ STL)
/*
//1]Vectors->iterators
//vectors uses random access iterators
//begin(), end(), rbegin(), rend(), cbegin(), cend()
//crbegin(), crend()

#include<iostream>
#include<vector>
#include<iterator>
#include<typeinfo>

using namespace std;

int main()
{
    vector<int> g1;

    for(int i=1; i<=5; i++)
        g1.push_back(i);

    vector<int>::iterator a;
    a=g1.begin();//this shows error
    //but it wont show error if you use
    //vector<int>::const_iterator a;
    //a=g1.begin();
    cout<<typeid(a).name()<<endl;
    *a=20;

    cout << "Output of begin and end: ";
    for (auto i = g1.begin(); i != g1.end(); ++i)
        cout << *i << " ";
}
*/
/*
//2]Vectors->Capacity
#include<iostream>
#include<vector>
#include<iterator>
#include<typeinfo>

using namespace std;

int main()
{
    vector<int> g1;

    for(int i=1; i<=5; i++)
        g1.push_back(i);

    cout<<"Size of given vector g1 is: "<<g1.size()<<endl;
    cout<<"Max_Size of given vector g1 is: "<<g1.max_size()<<endl;
    cout<<"Capacity of given vector g1 is: "<<g1.capacity()<<endl;

    for(int i=6; i<=9; i++)
        g1.push_back(i);

    cout<<"Size of given vector g1 is: "<<g1.size()<<endl;
    cout<<"Max_Size of given vector g1 is: "<<g1.max_size()<<endl;
    cout<<"Capacity of given vector g1 is: "<<g1.capacity()<<endl;

    g1.resize(6);
    cout<<"Size of given vector g1 is: "<<g1.size()<<endl;
    cout<<"Max_Size of given vector g1 is: "<<g1.max_size()<<endl;
    cout<<"Capacity of given vector g1 is: "<<g1.capacity()<<endl;

    g1.shrink_to_fit();
    cout<<"Size of given vector g1 is: "<<g1.size()<<endl;
    cout<<"Max_Size of given vector g1 is: "<<g1.max_size()<<endl;
    cout<<"Capacity of given vector g1 is: "<<g1.capacity()<<endl;

    cout<<g1.empty()<<endl;
    cout<<"Size of given vector g1 is: "<<g1.size()<<endl;
    cout<<"Max_Size of given vector g1 is: "<<g1.max_size()<<endl;
    cout<<"Capacity of given vector g1 is: "<<g1.capacity()<<endl;
}
*/
/*
//3]Vectors->Element Access
#include<bits/stdc++.h>
using namespace std;

int main()
{
    vector<int> g1;

    for(int i=1; i<=10; i++)
        g1.push_back(i*10);

    int& b = g1.at(4);
    b=13;
    cout<<g1[4]<<endl;
    cout<<"Reference operator: g1[2] = "<<g1[2]<<endl;
}
*/
/*
// vector::reserve
#include <iostream>
#include <vector>

int main ()
{
    std::vector<int>::size_type sz;

    std::vector<int> foo;
    sz = foo.capacity();

    std::cout << "making foo grow:\n";
    for (int i=0; i<100; ++i)
    {
        foo.push_back(i);
        if (sz!=foo.capacity())
        {
          sz = foo.capacity();
          std::cout <<"Iteration: "<< i << "capacity changed: " << sz << '\n';
        }
    }

    std::vector<int> bar;
    sz = bar.capacity();
    bar.reserve(100);   // this is the only difference with foo above

    std::cout << "making bar grow:\n";
    for (int i=0; i<100; ++i)
    {
        bar.push_back(i);
        if (sz!=bar.capacity())
        {
          sz = bar.capacity();
          std::cout << "capacity changed: " << sz << '\n';
        }
    }
    return 0;
}
*/

//4]Vectorss->Modifiers
/*
#include<iostream>
#include<vector>
using namespace std;

int main()
{
    vector<int> v{1,2,3,4,5,6,7,8};
    v.push_back(6);

    cout<< "The vector elements are: ";
    for(int i = 0; i < v.size(); i++)
        cout<<v[i]<<" ";

    cout<<"\nSize of vector is: "<<v.size()<<endl;

    //v.shrink_to_fit();

    cout<< "The vector elements are: ";
    for(int i = 0; i < v.size(); i++)
        cout<<v[i]<<" ";

    cout<<"\nSize of vector is: "<<v.size();
    cout<<"\nCapacity of vector is: "<<v.capacity();
}
*/

// vector assign
#include <iostream>
#include <vector>

int main ()
{
  std::vector<int> first;
  std::vector<int> second;
  std::vector<int> third;
  std::vector<int> v{1,2,3,4,5,6,7,8};

  first.assign (7,100);             // 7 ints with a value of 100

  std::vector<int>::iterator it;
  it=first.begin()+1;

  v.assign (it,first.end()-1);
  second.assign (it,first.end()-1); // the 5 central values of first

  int myints[] = {1776,7,4};
  third.assign (myints,myints+3);   // assigning from array.

  std::cout << "Size of first: " << int (first.size()) << '\n';
  std::cout << "Size of second: " << int (second.size()) << '\n';
  std::cout << "Size of third: " << int (third.size()) << '\n';

    std::cout<< "\nThe first vector elements are: ";
    for(int i = 0; i < first.size(); i++)
        std::cout<<first[i]<<" ";

    std::cout<< "\nThe second vector elements are: ";
    for(int i = 0; i < second.size(); i++)
        std::cout<<second[i]<<" ";

    std::cout<< "\nThe third vector elements are: ";
    for(int i = 0; i < third.size(); i++)
        std::cout<<third[i]<<" ";

    std::cout<< "\nThe V vector elements are: ";
    for(int i = 0; i < v.size(); i++)
        std::cout<<v[i]<<" ";

  return 0;
}
