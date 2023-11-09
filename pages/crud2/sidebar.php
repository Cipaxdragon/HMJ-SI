 <style>

 .pilih{
   border-radius: 10px;
   padding: 10px;
 }   
 .pilih:hover{
   color: red;
   background-color: white;
 }
 .pilih:hover a{
   font-weight: 500;
   color: black;
   background-color: white;
 }

 </style>
 <!-- Sidebar -->
      <aside class="bg-gray-800 text-white h-screen w-64 fixed top-0 left-0 overflow-y-auto">
         <div class="p-4">
            <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
            <ul>
               <li class="pilih mb-2"><a href="d.php?page=artikel" class="text-gray-300 hover:text-white">Artikel</a></li>
               <li class="pilih mb-2"><a href="d.php?page=pengurus" class="text-gray-300 hover:text-white">Pengurus</a></li>
               <li class="pilih mb-2"><a href="#" class="text-gray-300 hover:text-white">Galeri</a></li>
            </ul>
         </div>
      </aside>