 <div>
     <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

         @forelse ($vacantes as $vacante)
             <div
                 class="p-6 dark-bg-white border-b border-gray-200 text-white md:flex md:justify-between md:items-center">
                 <div class="leading-10">
                     <a href="#" class="text-xl font-bold">
                         {{ $vacante->titulo }}
                     </a>
                     <p class="text-sm text-gray-600 font-bold text-white">{{ $vacante->empresa }}</p>
                     <p class="text-sm text-gray-600 font-bold text-white">{{ $vacante->ultimo_dia }}</p>
                 </div>

                 <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                     <a href="#"
                         class="bg-white py-2 px-2 rounded-lg text-black text-xs font-bold uppercase text-center">Candidatos</a>

                     <a href="{{ route('vacantes.edit', $vacante->id) }}"
                         class="bg-white py-2 px-2 rounded-lg text-black text-xs font-bold uppercase text-center">editar</a>

                     <a href="#"
                         class="bg-white py-2 px-2 rounded-lg text-black text-xs font-bold uppercase text-center">eliminar</a>
                 </div>

             </div>
         @empty
             <p class="p-3 text-center text-md text-white">No hay vacantes que mostrar.</p>
         @endforelse


     </div>
     <div class="mt-10">
         {{ $vacantes->links() }}
     </div>

 </div>
