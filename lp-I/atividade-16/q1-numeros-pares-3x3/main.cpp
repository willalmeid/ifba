#include <iostream>
using namespace std;

main () {
	int matriz [3] [3];
	int qtd1=0;
	int qtd2=0;
	
	for( int i=0; i<3; i++) {
		for (int j=0; j<3; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
			if (matriz [i] [j]%2==0)
			qtd1++;
			else if (matriz [i] [j]%2!=0)
			qtd2++;
		}	
	}	

	for( int i=0; i<3; i++) {
		for (int j=0; j<3; j++){
			cout<< matriz [i] [j] <<"   ";
		}
		cout<< "\n";	
	}
	cout<<"a quantidade de numeros pares sao:  "<<qtd1;
	cout<<"\n a quantidade de numeros impares sao:  "<<qtd2;	
}
