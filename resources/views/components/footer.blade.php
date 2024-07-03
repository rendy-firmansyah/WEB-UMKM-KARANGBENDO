 <footer class="bg-gray-900 text-white text-center py-4">
     <p>&copy; <span id="year"></span> Politeknik Negeri Banyuwangi. All rights reserved.</p>
 </footer>

 <script>
     document.getElementById('year').textContent = new Date().getFullYear();
 </script>
 @vite('resources/js/app.js')
