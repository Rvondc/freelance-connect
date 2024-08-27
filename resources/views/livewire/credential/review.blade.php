<div>
    <div class="bg-[#151922] w-[calc(100%-300px)] h-screen absolute">
        <div class="bg-white m-4 p-4 rounded">
            <h1 class="font-bold">Credential Review</h1>
            <hr class="m-3">
            <div class="table-responsive">
                <table class="table w-[100%]">
                    <thead>
                        <th class="text-start">Name</th>
                        <th class="text-start">User Type</th>
                        <th class="text-start">Status</th>
                        <th class="text-start">Date</th>
                        <th class="text-start">Actions</th>
                    </thead>
                    <tbody>
                        @foreach ($pending as $approval)
                        <tr>
                            @php($user = $approval->getUser())
                            <td>{{ $user->getFullname() }}</td>
                            <td>{{ $user->user_type }}</td>
                            <td>{{ $approval->status }}</td>
                            <td>{{ $approval->created_at }}</td>
                            <td>
                                <div class="inline-flex rounded-md shadow-sm" role="group">
                                    <button wire:click="$dispatch('openModal', { component: 'view-credentials', arguments: { user: {{ $user->id }}, pending: {{ $approval->id }} }})" type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-sky-400 border rounded-l-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                                        ID
                                    </button>
                                    @if ($approval->status == 'Pending')
                                    <button
                                        wire:confirm="Approve this user?"
                                        wire:click="approve({{ $approval->id }})"
                                        type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-green-400 border-t border-b hover:bg-gray-100 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                                        Approve
                                    </button>
                                    <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-red-400 border rounded-r-lg hover:bg-gray-100 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                                        Reject
                                    </button>
                                    @elseif ($approval->status == 'Approved')
                                    <button disabled
                                        class="px-4 py-2 text-sm font-medium text-gray-900 bg-gray-500 border-t border-b">Approved</button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>