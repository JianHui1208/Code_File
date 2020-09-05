#include <iostream>
using namespace std;

int main(){
    int myNum = 15;
    double myNum2 = 115.99;
    char myLetter = 'A';
    string myStr = "William";
    bool myBoolean = false;
    // true = 1 false = 0
    int x = 15;
    double y = 23.5;
    float z = x + y;
    int a = 5, b = 6, c = 50;
    //same like the JAVA "final"
    const int phone = 90;
    const double number = 9.99;
    float f1 = 35e3;
    double d1 = 12E4;
    //follow by ASCII value
    char o = 65, u = 66, l = 67;
    cout << myNum << "\n";
    cout << myNum2 << "\n";
    cout << myLetter << "\n";
    cout << myStr << "\n";
    cout << myBoolean << "\n";
    cout << "I am " << myNum << " years old.\n";
    cout << z << "\n";
    cout << a + b + c << "\n";
    cout << phone << "\n";
    cout << number << "\n";
    cout << f1 << "\n";
    cout << d1 << "\n";
    cout << o << "\n";
    cout << u << "\n";
    cout << l;
    return 0;
}

//always return true(1) and false(0)
//==	Equal to	x == y
//!=	Not equal	x != y
//>	Greater than	x > y
//<	Less than	x < y
//>=	Greater than or equal to	x >= y
//<=	Less than or equal to	x <= y
