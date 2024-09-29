<x-filament-panels::page>
    <div>
        <section class="pt-4">
            {{ $this->table }}
        </section>
    </div>

    <h1 class="text-2xl font-bold">Reports Data</h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Unit Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Issue Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Message
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $report->unit_number }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $report->issue_type }}
                    </td>
                    <td class="px-6 py-4">
                        {{ Str::limit($report->message, 50) }}
                    </td>
                    <td class="px-6 py-4 capitalize">
                        {{ $report->status }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-filament-panels::page>