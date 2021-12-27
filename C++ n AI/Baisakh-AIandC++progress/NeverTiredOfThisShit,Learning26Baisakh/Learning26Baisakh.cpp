//from the video from the cherno: 12:27am(Baisakh27)
//Implicit Conversion and the Explicit Keyword in C++
//https://www.youtube.com/watch?v=Rr1NX1lH3oE
/*
#include<iostream>
#include<string>

class Entity
{
private:
    std::string m_Name;
    int m_Age;
public:
    Entity(const std::string& name): m_Name(name), m_Age(-1){}
    Entity(int age): m_Name("Unknown"), m_Age(age){}
};

void printEntity(const Entity& entity)
{
    //printing
}

int main()
{
    //We can use constructors to create objects in different ways
    Entity a("Cherno");//This uses the constructor we defined
    Entity b = Entity("Cherno"); //"
    Entity c = 22;// But this is an implicit conversion
    printEntity(22);//This is also an implicit conversion
    std::cin.get();
}
*/
//here, in Entity b = 22; it is an implicit conversion,
//where compiler implicitly converts the integer into entity
//because there is a constructor that uses the integer to construct entity

//to disable this we use 'explicit' keyword which disables implicit conversion
//and then the object have to either use proper syntax or be casted
//going to study casting tomorrow

#include<iostream>
#include<string>

class Entity
{
private:
    std::string m_Name;
    int m_Age;
public:
    Entity(const std::string& name): m_Name(name), m_Age(-1){}
    explicit Entity(int age): m_Name("Unknown"), m_Age(age){}
};

void printEntity(const Entity& entity)
{
    //printing
}

int main()
{
    Entity a("Cherno");
    Entity b = Entity("Cherno");
    Entity c = 22;// Error occurs
    printEntity(22);//Error since explicit keyword disables implicit conversion using that constructor
    std::cin.get();
}
