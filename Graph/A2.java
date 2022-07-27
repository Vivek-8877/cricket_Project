package Graph;

import java.util.PriorityQueue;
import java.util.Scanner;

/*



/*



                                      ___            ___                                                        
            .-.                      (   )          (   )                                                       
 ___  ___  ( __)  ___  ___    .--.    | |   ___      | |   ___    ___  ___   ___ .-. .-.     .---.   ___ .-.    
(   )(   ) (''") (   )(   )  /    \   | |  (   )     | |  (   )  (   )(   ) (   )   '   \   / .-, \ (   )   \   
 | |  | |   | |   | |  | |  |  .-. ;  | |  ' /       | |  ' /     | |  | |   |  .-.  .-. ; (__) ; |  | ' .-. ;  
 | |  | |   | |   | |  | |  |  | | |  | |,' /        | |,' /      | |  | |   | |  | |  | |   .'`  |  |  / (___) 
 | |  | |   | |   | |  | |  |  |/  |  | .  '.        | .  '.      | |  | |   | |  | |  | |  / .'| |  | |        
 | |  | |   | |   | |  | |  |  ' _.'  | | `. \       | | `. \     | |  | |   | |  | |  | | | /  | |  | |        
 ' '  ; '   | |   ' '  ; '  |  .'.-.  | |   \ \      | |   \ \    | |  ; '   | |  | |  | | ; |  ; |  | |        
  \ `' /    | |    \ `' /   '  `-' /  | |    \ .     | |    \ .   ' `-'  /   | |  | |  | | ' `-'  |  | |        
   '_.'    (___)    '_.'     `.__.'  (___ ) (___)   (___ ) (___)   '.__.'   (___)(___)(___)`.__.'_. (___)       
                                                                                                                
                                                                                                                
           ___                                ___   ___                                                         
          (   )                              (   ) (   )                                                        
  .--.     | | .-.     .---.   ___  ___    .-.| |   | | .-.     .---.   ___ .-.     ___  ___                    
 /    \    | |/   \   / .-, \ (   )(   )  /   \ |   | |/   \   / .-, \ (   )   \   (   )(   )                   
|  .-. ;   |  .-. .  (__) ; |  | |  | |  |  .-. |   |  .-. .  (__) ; |  | ' .-. ;   | |  | |                    
|  |(___)  | |  | |    .'`  |  | |  | |  | |  | |   | |  | |    .'`  |  |  / (___)  | |  | |                    
|  |       | |  | |   / .'| |  | |  | |  | |  | |   | |  | |   / .'| |  | |         | '  | |                    
|  | ___   | |  | |  | /  | |  | |  | |  | |  | |   | |  | |  | /  | |  | |         '  `-' |                    
|  '(   )  | |  | |  ; |  ; |  | |  ; '  | '  | |   | |  | |  ; |  ; |  | |          `.__. |                    
'  `-' |   | |  | |  ' `-'  |  ' `-'  /  ' `-'  /   | |  | |  ' `-'  |  | |          ___ | |                    
 `.__,'   (___)(___) `.__.'_.   '.__.'    `.__,'   (___)(___) `.__.'_. (___)        (   )' |                    
                                                                                     ; `-' '                    
                                                                                      .__.' 
                                                                                      
                                                                                      







*/




/**
 * A2
 */
public class A2 {

    public static void main(String args[]) {
        Scanner scn = new Scanner(System.in);
        int n = scn.nextInt();
        int m = scn.nextInt();
        int mod = 1000000007;
        int[] a = new int[n];
        for(int i=0;i<n;i++) {
            a[i]=scn.nextInt();
        }
        
        System.out.println(f(a,0,m));
    }

    public static void print(int[] a) {
        for(int b : a) {
            System.out.print(b+" ");
        }
        System.out.println();
    }
    
    public static int f(int[] a,int i,int k) {
        if(i>=a.length) {
            if(isValid(a)) {
                print(a);
                return 1;
            }
            return 0;
        }
        
        int ans=0;
        if(a[i]==0) {
            for(int j=1;j<=k;j++) {
                a[i]=j;
                ans+=f(a,i+1,k);
                a[i]=0;
            }
        } else {
            ans = f(a,i+1,k);
        }
        return ans;
    }
    
    public static boolean isValid(int[] a) {
        if(a.length==1) return true;
        for(int i=0;i<a.length;i++) {
            if(i==0) {
                if(Math.abs(a[i]-a[i+1])>1) return false;
            } else if(i==a.length-1) {
                if(Math.abs(a[i]-a[i-1])>1) return false;
            } else {
                if(Math.abs(a[i]-a[i+1])>1 || Math.abs(a[i]-a[i-1])>1) return false;
            }
        }
        return true;
    }
}