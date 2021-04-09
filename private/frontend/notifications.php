<div class="md:px-32 py-8 w-full">
  <div class="shadow overflow-hidden md:rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">id</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Username</th>  
        </tr>
      </thead>
    <tbody class="text-gray-700">
      <tr>
        <td class="w-1/3 text-left py-3 px-4"><?php echo $userid; ?></td>
		<td class="w-1/3 text-left py-3 px-4"><?php echo User::getUsername($userid); ?></td>		
      </tr>
    </tbody>
    </table>
  </div>
</div>

<div class="md:px-32 py-8 w-full">
  <div class="shadow overflow-hidden md:rounded border-b border-gray-200">
    <table class="min-w-full bg-white">
      <thead class="bg-gray-800 text-white">
        <tr>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">id</th>
          <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Username</th>  
        </tr>
      </thead>
    <tbody class="text-gray-700">
      <tr>
        <td class="w-1/3 text-left py-3 px-4"><?php echo $userid; ?></td>
		<td class="w-1/3 text-left py-3 px-4"><?php echo User::getUsername($userid); ?></td>		
      </tr>
    </tbody>
    </table>
  </div>
</div>