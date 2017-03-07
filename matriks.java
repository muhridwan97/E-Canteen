import java.util.Scanner;
public class matriks {
    public static void main (String args []){
        
        Scanner input=new Scanner (System.in);
        int x,y ,b;
        
        System.out.println("masukkan ordo baris :");
        x=input.nextInt();
        System.out.println("masukkan ordo kolom: ");
        y=input.nextInt();
        
        int [][] a=new int [x][y];
        for(int z=0;z<x;z++){
            for (int w=0;w<y;w++){
                 System.out.println("masukkan angka ke "+(z+1)+","+(w+1));
                 a[z][w]=input.nextInt();}
    }
        System.out.println("matriks asli :");
       for(int z=0;z<x;z++){
            for (int w=0;w<y;w++){
                 System.out.print(a[z][w]);
                 System.out.print("\t");
    }System.out.println(" ");
    }     
        System.out.println("matriks transvernya :");
            for (int w=0;w<y;w++){
                for(int z=0;z<x;z++){
                 System.out.print(a[z][w]);
                 System.out.print("\t");
    }System.out.println(" ");
    }     
}}
