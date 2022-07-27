package Graph;
import java.util.*;

public class A1 {
    public static void main(String args[]) {
        Scanner scn = new Scanner(System.in);
        int n = scn.nextInt();
        int m = scn.nextInt();
        int mod = 1000000007;
        int[] a = new int[n];
        for(int i=0;i<n;i++) {
            a[i]=scn.nextInt();
        }
        
        System.out.println("A1 --> "+f(a,0,m));
    }

    public static void print(int[] a) {
        for(int b : a) {
            System.out.print(b+" ");
        }
        System.out.println();
    }

    public static int f(int[] a,int i,int k) {
        if(a.length==1) return 1;
        if(i>=a.length) {
            print(a);
            return 1;
        }
        
        int ans=0;
        if(a[i]==0) {
            if(i==0) {
                for(int j=1;j<=k;j++) {
                    a[i]=j;
                    ans+=f(a,i+1,k);
                    a[i]=0;
                }
            } else {
                a[i]=a[i-1]-1;
                int v1 = f(a,i+1,k);
                a[i]=a[i-1];
                int v2 = f(a,i+1,k);
                a[i]=a[i-1]+1;
                int v3 = f(a,i+1,k);
                a[i]=0;
                ans+=(v1+v2+v3);
            }
        } else {
            if(i==0) {
                ans = f(a,i+1,k);
            } else {
                if(Math.abs(a[i]-a[i-1])<=1) {
                    ans = f(a,i+1,k);
                }
            }
        }
        return ans;
    }

}
