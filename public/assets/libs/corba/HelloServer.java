import HelloApp.*;
import org.omg.CosNaming.*;
import org.omg.CosNaming.NamingContextPackage.*;
import org.omg.CORBA.*; 
import org.omg.PortableServer.*;
import org.omg.PortableServer.POA;
import java.util.Properties;
class HelloImpl extends HelloPOA
{
	private ORB orb;
	public void setORB(ORB orb_val){
		orb=orb_val;
	}
	public String sayhello(){
		return "HEllo world";
	}
	public void shutdown(){
		orb.shutdown(false);
	}
}
public class HelloServer{
	
	public static void main(String args[]){
		try{
			ORB orb =ORB.init(args,null);
			POA rootpoa = POAHelper.narrow(orb.resolve_initial_references("RootPOA"));
			rootpoa.the_POAManager().activate();
			
			HelloImpl impl=new HelloImpl();
			impl.setORB(orb);
			org.omg.CORBA.Object ref = rootpoa.servant_to_reference(impl);
			Hello href = HelloHelper.narrow(ref);
			org.omg.CORBA.Object objref=orb.resolve_initial_references("NameService");
			NamingContextExt ncref = NamingContextExtHelper.narrow(objref);
			String name = "hello";
			NameComponent path[]= ncref.to_name(name);
			ncref.rebind(path,href);
			System.out.println("Server is waiting");
			orb.run();
		}
		catch(Exception e){
			System.err.println("error"+e);
			e.printStackTrace(System.out);
		}
	}
}

			