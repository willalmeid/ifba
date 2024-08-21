#include <iostream>
using namespace std;

void soma(){

	int x, y, z;
	
	cout<<"Informe x:";
	cin>>x;
	cout<<"Informe y:";
	cin>>y;
	cout<<"Informe z:";
	cin>>z;
	
	if (x==y && y==z)
	cout<<"E um triangulo equilatero";
	else if(x==y && y!=z)
	cout<<"Eh um triangulo isosceles";
	else if(x!=y && y==z)
	cout<<"Eh um triangulo isosceles";
	else if(x==z && y!=z)
	cout<<"Eh um triangulo isosceles";
	else
	cout<<"Eh um triangulo escaleno";
}
main(){
	soma();
}
