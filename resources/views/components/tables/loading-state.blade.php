@props(['columnSize', 'target'])

<div>
  <tr>
    <td colspan="{{$columnSize}}" wire:loading.class.remove="hidden" wire:target="{{$target}}" class="text-center hidden">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </td>
  </tr>
</div>