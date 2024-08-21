#include <iostream>
using namespace std;

main () {
	int matriz [2] [4];
	int maior=0;
	
	for( int i=0; i<2; i++) {
		for (int j=0; j<4; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
			if (matriz [i] [j] > maior)
			maior=matriz [i] [j];
		}	
	}	

	for( int i=0; i<2; i++) {
		for (int j=0; j<4; j++){
			cout<< matriz [i] [j] <<"   ";
		}
		cout<< "\n";	
	}	
	cout<< " "<<maior;
}
