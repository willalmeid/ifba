#include<iostream> 
using namespace std; 

int main( ){
	float numero [10];
	bool teste=0;
 
	for (int i = 0; i < 10; i++) {
		cout << "Digite numero: ";
		cin >> numero [i]; 
	}
 	for(int i = 0; i < 10; i++){
		if (numero [i]>50) {
			cout << "\n os numeros sao: " << numero [i];
			teste=1;
		}
	}
	if (!teste)
		cout << "\n Numero invalido";
}
