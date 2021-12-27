//from "https://www.geeksforgeeks.org/pair-in-cpp-stl/"
//simple container defined in <utility>
//consisting of two data elements or objects
//(first,second)
//provides a way to store two heterogeneous objects as a single unit
//can be assigned, copied and compared
//array of objects allocated in a map or hash_map are of type
//pair by default in which
//all first elements are unique keys associated with
//their second value objects
//to access the elements, we use variable name followed by dot operator
//followed by the keyword first or second

/*
#include<iostream>
#include<utility>

using namespace std;

int main()
{
    pair<int, char> PAIR1;

    PAIR1.first = 100;
    PAIR1.second = 'G';

    cout<<PAIR1.first<<" ";
    cout<<PAIR1.second<<endl;

    return 0;
}
*/

/*
//initializing a pair
#include<iostream>
#include<utility>

using namespace std;

int main()
{
    pair<int, char> g2(1, 'a');
    cout << g2.first << " ";
    cout << g2.second << endl;
    pair<int, char> g3(g2);
    cout << g3.first << " ";
    cout << g3.second << endl;
    return 0;
}
*/

/*
//member functions
//make_pair() allows to create a value pair without writing the types explicitly
#include<iostream>
#include<utility>
using namespace std;

int main()
{
    pair<int, int> g2 = make_pair(12, 12);
    cout<<g2.first<<endl;
    cout<<g2.second<<endl;
}
*/

//operators(=, ==, !=. >=, <=)
//assigning a pair to other
#include<iostream>
#include<utility>
using namespace std;

int main()
{
    pair<int, char> p1(1, 'a');
    pair<int, char>& p2=p1;
    cout<<p2.first<<" "<<p2.second<<endl;
    p2.second='u';
    cout<<p1.first<<" "<<p1.second<<endl;
    pair<int, char> p3(5, 'u');
    if(p1==p3)
        printf("Yes");

    return 0;
}
