# EZ-Systems

You are required to write classes with a LoadBalancer funcionality:

* Class has 2 public methods.

* The first – constructor – takes two arguments. The first argument is a list of host
instances that should be load balanced. The second argument is the variant of load
balancing algorithm to be used.

* There are two variants: the first will simply pass the requests sequentially in rotation to each
of the hosts in the list. The second one will either take the first host that has a load under
0.75 or if all hosts in the list are above 0.75, it will take the one with the lowest load.

* The second method is called handleRequest(Request $request)and will load balance
the request according to the variant passed on construction.
