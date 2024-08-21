#include<iostream> 
using namespace std; 

int main( ) {
	int numero [30], qtd = 0;
 
	for (int i = 0; i < 30; i++) {
		cout << "Digite numero: ";
		cin >> numero [i]; 
	}
	for (int i = 9; i >= 0; i--){
		if (numero [i]==10)
		qtd++;
	}
	cout << "\n   " << qtd;
}
