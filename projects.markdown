---
title: Research Projects
layout: index
bodyclass: projects
---

Role Discovery in Social Networks
---------------------------------
In social network analysis, role discovery involves partitioning the actors in a network into disjoint sets using a notion of equivalence which captures the structure of relationships among actors. The notion of roles differs significantly from that of communities, a popular way to organize actors in a network. A community consists of a set of nodes that have more links among themselves than to other nodes in the network. A role consists of nodes having similar structural signature, such as, broker nodes, clique members, star centers and near isolates. Nodes playing the same role are typically spread across the network and need not even be in the same component of the network. Our proposed approaches discover structural roles based on the <i>complete structural view of a graph</i>, hence do not require local node characteristics to be defined or computed <i>a priori</i> as with some of the existing \[[1]\] role discovery algorithms.
 The focus of my research work has been on the following two problems:

1. M&epsilon;EPs - Soft Role Discovery using Multiple &epsilon;-Equitable Partitions.
2. RID&epsilon;ER - Scalable Role Discovery in Networks.


### Soft Roles

* [M&epsilon;EPs (Paper)](https://www.dropbox.com/s/mw590lpgre5bxiq/meeps.pdf?dl=0) <span>Multiple &epsilon;-Equitable Partitions - Soft Role Discovery for Large Networks.</span>
* [Summer School Network Analysis using M&epsilon;EPs (Demo)](http://randomsurfer.in/summer.html) <span>Qualitative analysis of M&epsilon;EPs on the Summer School Multi-Role Ground Truth Network.</span>
* [Key Contributions of M&epsilon;EPs:]() <span>i. M&epsilon;EPs takes into account the <b>complete structural view of the graph</b> for computing the roles.</span> <span>ii. M&epsilon;EPs is <b>scalable</b> to large sparse graphs.</span> <span>iii. Given the soft roles memberships of actors, M&epsilon;EPs categorizes the actors into equivalence classes or positions.</span> <span>iv. Validated the roles and positions with multi-role ground-truth network datasets.</span>

### Scalable Role Discovery
* [RID&epsilon;ER (Paper)](http://randomsurfer.in/resources/gupte_SDM_MNG_14.pdf) <span>Scalable Positional Analysis for Studying Evolution of Nodes in Networks</span>
* [Key Contributions of RID&epsilon;ER:]() <span>i. <b>Highly scalable</b> for large sparse graphs. The latest implementation (details are yet to be published) is capable of handling graphs with half a billion edges on a single high end machine.</span> <span>ii. Tool for studying node & link evolution characteristics in time evolving networks.</span> <span>iii. Exploratory & visual analysis tool for dynamic networks. </span>

This work opens up the study of roles in large social networks. Please refer to [my thesis](http://randomsurfer.in/resources/thesis_PVG.pdf) for more details.


[1]: http://www.cs.cmu.edu/~dkoutra/papers/12-kdd-recursiverole.pdf "Henderson <i>et al.</i>, RolX: Structural Role Extraction & Mining in Large Graphs. SIGKDD 2012."


