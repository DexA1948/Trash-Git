/*
//Structured Binding in C++
//Learning from The Cherno
//https://www.youtube.com/watch?v=eUsTO5BO3WI

#include<iostream>
#include<tuple>
#include<string>

std::tuple<std::string, int> CreatePerson()
{
    return {"Cherno", 24};
}

int main()
{
    //std::tuple<std::string, int> person = CreatePerson();
    //or
    //auto person = CreatePerson();

    //std::string& name = std::get<0>(person);
    //int age = std::get<1>(person);

    //std::cout<<name<<std::endl;

    //using Tie
    //std::string name;
    //int age;
    //std::tie(name,age)=CreatePerson();

    //using  Structured Binding
    auto[name, age]=CreatePerson();

}
*/
/*
//Range based for Loop
//learning about type inference in C++
#include<iostream>
#include<bits/stdc++.h>
using namespace std;

int& fun()
{
    static int a=10;
    cout<<"Address of a is: "<<&a<<endl;
    return a;
}

int main()
{
    //only doing auto a = fun() will default to int type
    //instead of int& type and auto& n=fun() will make a of int& type
    auto& a = fun();
    cout<<a<<endl;
    cout<<&a<<endl;
    a=11;
    auto&& b=fun();
    cout<<b<<endl;
    cout<<&b<<endl;
    cout<<"Type of a is "<<typeid(a).name()<<endl;
}
*/

//decltype keyword

