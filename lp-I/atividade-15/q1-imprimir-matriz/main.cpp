#include <iostream>
using namespace std;

main () {
	int matriz [3] [3];
	
	for( int i=0; i<3; i++) {
		for (int j=0; j<3; j++){
			cout<< "Digite um mumero:   ";
			cin>>matriz [i] [j];
		}	
	}	

	for( int i=0; i<3; i++) {
		for (int j=0; j<3; j++){
			cout<< matriz [i] [j] <<"   ";
		}
		cout<< "\n";	
	}	
}
