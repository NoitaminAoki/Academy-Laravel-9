@props(['columnSize', 'target'])
<div>
    <tr>
      <td colspan="{{$columSize}}" @if (isset($target)) wire:loading.class="hidden" @endif class="text-center text-muted">
        <small>No Data Avaiables</small>
      </td>
    </tr>
</div>