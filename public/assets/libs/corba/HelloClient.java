import HelloApp.*;
import org.omg.CosNaming.*;
import org.omg.CosNaming.NamingContextPackage.*;
import org.omg.CORBA.*; 
public class HelloClient{
	static Hello HelloImpl;
	public static void main(String args[]){
		try{
			ORB orb=ORB.init(args,null);
			org.omg.CORBA.Object objref = orb.resolve_initial_references("NameService");
			NamingContextExt ncref = NamingContextExtHelper.narrow(objref);
			String name="hello";
			HelloImpl = HelloHelper.narrow(ncref.resolve_str(name));
			System.out.println("Obtain a handle on server object"+HelloImpl);
			System.out.println(HelloImpl.sayhello());
			HelloImpl.shutdown();
		}
		catch(Exception e){
			System.out.println("error:"+e);
			e.printStackTrace(System.out);
	    }
	}
}