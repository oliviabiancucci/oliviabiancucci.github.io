<!DOCTYPE html>
<html lang="en">
<head>
    <link rel ="stylesheet" href="style.css" >
    <title>Courses - Olivia Biancucci</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <section class="main">
        <div>
            <h2 class="center">Courses Completed</h2>
            <h5 class="center">University of Guelph</h5>
            <div class="courseContainer center">
            <ul class="courseText display-inline">
                <li onclick="toggleDescription(this)">CIS 1050: Web Design and Development
                    <div class="courseDescription">An introduction to the basics of designing and 
                    developing a website with HTML and CSS. It examines the basic concepts, technologies,
                    issues and techniques required to develop and maintain websites.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 1300: Programming
                    <div class="courseDescription">This course examines the applied and conceptual aspects 
                        of programming. Topics may include data and control structures, program design, 
                        problem solving and algorithm design, operating systems concepts, and fundamental 
                        programming skills. C programming language used throughout the course.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 1910: Discrete Structures in Computing I
                    <div class="courseDescription">This course is an introduction to discrete structures and 
                        formal methodologies used in computer science, including Boolean algebra, propositional 
                        logic, predicate logic, proof techniques, set theory, equivalence relations, order 
                        relations, and functions.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 2030: Structures and Applications of Microcomputers
                    <div class="courseDescription">This course examines the components of a computer system, including 
                        memories, CPU, buses, and input/output subsystems and interface hardware. Programming of 
                        these systems is studied, including instruction sets, addressing modes, assembly/machine 
                        language programming, development of algorithms for data acquisition, display, and process 
                        control.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 2170: User Interface Design
                    <div class="courseDescription">This course is a practical introduction to the area of user interface
                        construction. Topics include user interface components and their application, best practices
                        for user interface design, approaches to prototyping, and techniques for assessing interface
                        suitability.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 2430: Object Oriented Programming
                    <div class="courseDescription">This course introduces the Object Oriented approach to programming and
                        algorithm design. Topics will include the creation and use of objects from class libraries,
                        user defined objects, inheritance, modularity, generic code, components, collections and
                        containers, and an introduction to OO design methodologies. Java used throughout the course.
                    </div>
                </li>
                <li onclick="toggleDescription(this)">CIS 2500: Intermediate Programming
                    <div class="courseDescription">In this course students learn to interpret a program specification
                        and implement it as reliable code, as they gain experience with pointers, complex data 
                        types, important algorithms, intermediate tools and techniques in problem solving, 
                        programming, and program testing. C programming language used throughout the course.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 2520: Data Structures
                    <div class="courseDescription">This course is a study of basic data structures, such as lists, 
                        stacks, queues, trees, and tables. Topics which will be examined include abstract data 
                        types, sequential and linked representations, and an introduction to algorithm analysis; 
                        various traversal, search, insertion, removal, and sorting algorithms. C programming 
                        language used throughout the course.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 2750: Software Systems Development and Integration
                    <div class="courseDescription">This course introduces techniques and tools used in the development 
                        of large software systems. Students learn methods for organizing and constructing modular 
                        systems, manipulating files, introductory interface design, and use of databases. Software 
                        tools for managing projects, database connectivity, configuration management, and system 
                        application programmer interfaces are also covered.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 2910: Discrete Structures in Computing II
                    <div class="courseDescription">This course is a further introduction to discrete structures and 
                        formal methodologies used in computer science, including sequences, summations, recursion, 
                        combinatorics, discrete probability, and graph theory.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 3090: Parallel Programming
                    <div class="courseDescription">This course examines the current techniques for design and development 
                        of parallel programs targeted for platforms ranging from multicore computers to high-performance 
                        clusters, with and without shared memory. It includes theoretical models for, and hardware 
                        effects on, parallel computation, the definitions of speedup, scalability, and data- versus 
                        task-parallel approaches. The course will also examine strategies for achieving speedup based 
                        on controlling granularity, resource contention, idle time, threading overhead, work allocation, 
                        and data localization.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 3110: Operating Systems
                    <div class="courseDescription">This course covers operating systems in theory and practice by focusing on 
                        the components in a system: scheduling, resource allocation, process management, multi-programming, 
                        multi-tasking, I/O control, file systems, and mechanisms for client-server computing using examples 
                        from contemporary operating systems.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 3150: Theory of Computation
                    <div class="courseDescription">This course explores the theory of computation including automata theory, Turing 
                        machines and their variants, formal languages, parsing, the Halting problem, undecidability, and 
                        NP-completeness.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 3210: Computer Networks
                    <div class="courseDescription">This course covers the high-level (protocol) oriented aspects of computer networks, 
                        specifically: application, session, transport and network layers. It includes the Internet, socket-level 
                        programming, multimedia and quality of service issues. The hardware aspects (switches, LANs, modems, 
                        transmission paths) are only covered at a functional level.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 3490: Analysis & Design of Computer Algorithms
                    <div class="courseDescription">The design and analysis of efficient computer algorithms are studied. Topics which 
                        will be studied include: standard methodologies, asymptotic behaviour, optimality, lower bounds, 
                        implementation considerations, graph algorithms, matrix computations (e.g. Strassen's method), NP-completeness.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 3530: Data Base Systems & Concepts
                    <div class="courseDescription">This course is a study of data organization and data management principles with the 
                        perspective of analyzing applications suitable for implementation using a DBMS. This will include an 
                        analysis of several data base models, query specification methods, and query processing techniques. 
                        Overview of several related issues including concurrency control, security, integrity and recovery. 
                    </div>
                </li>
                
                <li onclick="toggleDescription(this)">CIS 3750: Systems Analysis & Design in Applications
                    <div class="courseDescription">This course is an introduction to the issues and techniques encountered in the 
                        design and construction of software systems, focusing on the theory and models of software evolution. 
                        Topics include requirements and specifications, prototyping, design principles, object-oriented analysis 
                        and design, standards, integration, risk analysis, testing and debugging.
                    </div>
                </li>
                
                <li onclick="toggleDescription(this)">CIS 3760: Software Engineering
                    <div class="courseDescription">This course is an examination of the software engineering process, the production 
                        of reliable systems and techniques for the design and development of complex software. Topics include 
                        object-oriented analysis, design and modeling, software architectures, software reviews, software quality, 
                        software engineering, ethics, maintenance and formal specifications.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 4300: Human Computer Interaction
                    <div class="courseDescription">This course examines the methods for user interface software design, including 
                        interface representations and testing. Topics which will be studied include the evaluation and design 
                        of sample application systems, impacts of computer-based information systems on individuals and organizations, 
                        implementation and testing tools, and planning of learning stages and design of assistance subsystems.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 4510: Computer Security Foundations
                    <div class="courseDescription">This course covers basic concepts and practices in computer and network security. 
                        This includes topics such as fundamental concepts of computer security, network security, threat landscape, 
                        threat intelligence and attack methods, ethical hacking concepts and other hacking techniques, security 
                        technology and security policies, and cloud security.
                    </div>
                </li>

                <li onclick="toggleDescription(this)">CIS 4820: Game Programming
                    <div class="courseDescription">This course will focus on the components found in modern 3-D game engines. It will 
                        emphasize the algorithms and data structures required to create real-time computer graphics, sound and 
                        network communications.
                    </div>
                </li>

              </ul>
            </div>
        </div>
    </section>
    
    <footer class="headerfooter">
        <p class="footer-title">Copyright 2023 Olivia Biancucci</p>

    </footer>

    <script>
        function toggleDescription(element) {
            var description = element.querySelector('.courseDescription');
            description.classList.toggle('show-description');
        }
    </script>


</body>
</html>
