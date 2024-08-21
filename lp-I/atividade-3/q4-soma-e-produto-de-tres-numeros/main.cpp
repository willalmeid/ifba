#include <iostream> 
using namespace std; 

main( ) { 
	float x, y, z; 
	float soma; 
	float produto; 
	
	cout<<"digite x: "; 
	cin>>x; 
	cout<<"digite y: "; 
	cin>>y; 
	cout<<"digite z: "; 
	cin>>z; 
	
	soma = x + y + z; 
	produto = x * y * z;
	
	cout<<"\nA soma e: "<<soma; 
	cout<<"\nO produto e: "<<produto;
}
