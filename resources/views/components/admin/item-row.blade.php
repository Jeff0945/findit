@props(['item'])

<tr>
    <td>
        <input class="d-xxl-flex justify-content-xxl-center align-items-xxl-center"
               type="checkbox"
               style="width: 20px;height: 30px;text-align: center;"
               required/>
    </td>
    <td style="color: rgba(0, 0, 0, 0.5);font-family: 'Inter';">
        <a href="{{ route('admin.items.show', ['item' => $item->id]) }}"
           style="color: transparent;font-size: 18px;">
            <p style="color: rgba(0, 0, 0, 0.5);width: 600px;">{{ $item->name }}</p>
        </a>
    </td>
    <td style="font-size: 18px;font-family: 'Inter';color: rgba(0, 0, 0, 0.5);">{{ $item->reported_on }}</td>
    <td style="font-size: 18px;font-family: 'Inter';color: rgba(0, 0, 0, 0.5);">{{ $item->status_text }}</td>
</tr>