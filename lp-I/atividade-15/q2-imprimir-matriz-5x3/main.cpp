#include <iostream>
using namespace std;

main () {
	int matriz [5] [3];
	int soma=0;
	
	for( int i=0; i<5; i++) {
		for (int j=0; j<3; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
		}
	}
	

	for( int i=0; i<5; i++) {
		for (int j=0; j<3; j++){
			cout<< matriz [i] [j] <<"   ";
			soma= soma + matriz [i] [j];	
		}
		cout<< "\n";	
	}
	cout<< "A soma e:  "<< soma; 	
}
