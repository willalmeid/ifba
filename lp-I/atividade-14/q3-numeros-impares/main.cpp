#include<iostream> 
using namespace std; 

int main( ) {
	int numero [9];
 
	for (int i = 0; i < 9; i++) {
		cout << "Digite numero: ";
		cin >> numero [i]; 
	}
	for (int i = 0; i < 10; i++){
		if(numero [i]%2)
		cout << numero [i] << "   ";
	}
}
