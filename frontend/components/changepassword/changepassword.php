<label class="block"><span class="block font-medium text-sm text-gray-900 leading-tight">Password</span>
<div class="mt-2">
<input type="password" name="oldpassword" value="<?php echo htmlspecialchars($_POST['oldpassword'], ENT_QUOTES); ?>" placeholder="Current Password" class="block w-full border border-gray-300 rounded-lg bg-gray-100 px-3 py-2 leading-tight focus:outline-none focus:border-gray-600 focus:bg-white"/>
<input type="password" name="newpassword" value="<?php echo htmlspecialchars($_POST['newpassword'], ENT_QUOTES); ?>" placeholder="New Password" class="block w-full border border-gray-300 rounded-lg bg-gray-100 px-3 py-2 leading-tight focus:outline-none focus:border-gray-600 focus:bg-white"/>
<input type="password" name="newpasswordrepeat" value="" placeholder="Repeat Password" class="block w-full border border-gray-300 rounded-lg bg-gray-100 px-3 py-2 leading-tight focus:outline-none focus:border-gray-600 focus:bg-white"/>
</div>
</label>