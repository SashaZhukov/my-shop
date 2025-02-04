<table class="border-[1px] border-black ">
    <thead class="bg-gray-800">
    <tr>
        @foreach($columns as $column)
            <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]">{{ $column }}</th>
        @endforeach
            <th scope="col" class="text-white font-bold text-[24px] text-left py-[12px] px-[15px]"></th>
    </tr>
    </thead>
    <tbody>
    @foreach($entities as $item)
        <tr class="border border-[1px] border-black">
            @foreach($columns as $key => $column)
                @if($key == 'role')
                    <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ getUserRole($item->id) }}</td>
                @else()
                <td class="font-medium text-[18px] py-[12px] px-[15px]">{{ $item[$key] }}</td>
                @endif
            @endforeach
            @if(!empty($moreRoute))
                <td class="font-medium text-blueviolet text-[18px] py-[12px] px-[15px]"><a href="{{ route($moreRoute, $item->id) }}">More</a></td>
            @else

            @endif
        </tr>
        </tr>
    @endforeach
    </tbody>
</table>
