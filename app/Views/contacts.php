<div class="bg-white rounded-xl shadow">

<div class="flex justify-between p-6">

<h2 class="text-2xl font-bold">

Contacts

</h2>

<a href="/contacts/create"
class="bg-blue-600 text-white px-4 py-2 rounded">

New Contact

</a>

</div>

<table class="w-full">

<thead class="bg-gray-100">

<tr>

<th class="p-3 text-left">Name</th>

<th>Phone</th>

<th>Email</th>

<th>Company</th>

<th>Status</th>

<th></th>

</tr>

</thead>

<tbody>

<?php foreach($contacts as $contact): ?>

<tr class="border-b">

<td class="p-3">

<?= esc($contact['first_name']) ?>
<?= esc($contact['last_name']) ?>

</td>

<td><?= esc($contact['phone']) ?></td>

<td><?= esc($contact['email']) ?></td>

<td><?= esc($contact['company']) ?></td>

<td>

<span class="px-2 py-1 rounded bg-green-100 text-green-700">

<?= esc($contact['status']) ?>

</span>

</td>

<td>

<a href="/contacts/edit/<?= $contact['id'] ?>">

Edit

</a>

</td>

</tr>

<?php endforeach ?>

</tbody>

</table>

</div>