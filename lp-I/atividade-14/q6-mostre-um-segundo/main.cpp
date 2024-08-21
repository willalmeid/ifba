#include<iostream> 
using namespace std; 

int main( ) {
	
	int impar [6], numero [6], qtd = 0, soma = 0, qtd2 = 0;
	
	for (int i = 0; i < 6; i++) {
		cout << "Digite numero: ";
		cin >> numero [i];
		if (numero [i]%2==0){
			qtd++;
			soma = soma + numero [i]; 
		} else {
			impar [qtd2] = numero[i];		
			qtd2++;
		}
	}
	cout << "\n quantidade numero par:  " << qtd;
	cout << "\n soma dos numeros pares " << soma;
	cout << "\n quantidade numero ipar " << qtd2;
	cout << "\n Os numeros impares sao: " ;
 	
	for (int i = 0; i < qtd2; i++)	{
		cout << impar [i] << "\n   ";
	}
}

