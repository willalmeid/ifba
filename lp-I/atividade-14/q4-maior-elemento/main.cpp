#include<iostream> 
using namespace std; 

int main( ) {
	int numero [10], quantidade = 0, maior = 0;
 
	for (int i = 0; i < 10; i++) {
		cout << "Digite numero: ";
		cin >> numero [i];
		quantidade++;
		if (numero [i] > maior) 
		maior=numero [i];
	}
	for (int i = 0; i < 10; i++){
		cout << numero [i] << "   ";
	}
	cout << "\n O maior elemento do vetor eh:  " << maior;
}
