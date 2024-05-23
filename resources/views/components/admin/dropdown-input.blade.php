@props(['width' => 'auto', 'height' => 'auto', 'label' => '', 'identifier' => '', 'selected' => null, 'name' => '', 'id' => ''])

<div style="width: {{ $width }}; height: {{ $height }};">
    <input name="{{ $name }}" id="{{ $id }}" type="hidden">
    <p class="font-inter fw-bold" style="font-size: 18px;color: rgba(53, 51, 45, 1);">{{ $label }}</p>

    <div class="dropdown mb-2" style="margin-top: -13px">
        <input {{ $attributes(['class' => 'form-select dropdown-toggle', 'type' => 'text', 'data-bs-toggle' => 'dropdown']) }}>
        <div class="dropdown-menu" style="overflow-y: auto; max-height: 20rem;">
            {{ $slot }}
        </div>
    </div>
</div>

<script>
    $(function () {
        let selectedDataId

        $(document).on('click', '.dropdown-item', function () {
            let dropdownToggle = $(this).closest('.dropdown').find('.dropdown-toggle')
            let hiddenInput = $(this).closest('.dropdown').siblings('input')
            let data = $(this).data('info')
            let identifier = '{{ $identifier }}'

            dropdownToggle.val(data.name)
            hiddenInput.val(data.id).data('id', data.id)
            selectedDataId = data.id

            if (identifier.length > 0 && hiddenInput.prop('name').includes(identifier)) {
                let container = $(this).closest('.col-md-6')

                container.find(`input[name='${identifier}_id_number']`).val(data.id_number)
                container.find(`input[name='${identifier}_contact_number']`).val(data.contact_number)
            }
        })

        $(document).on('input', '.dropdown .dropdown-toggle', function () {
            let dropdownToggle = $(this)
            let hiddenInput = $(this).closest('.dropdown').siblings('input')

            filterDropdown(dropdownToggle)

            if (selectedDataId == hiddenInput.val()) {
                hiddenInput.val('').data('id', '')
            }

            if (!(hiddenInput.data('id') > 0)) {
                hiddenInput.val(dropdownToggle.val())
            }
        })

        @if(!is_null($selected))
        $('input[name={{ $name }}]').closest('div').find('.dropdown-item[data-id="{{ $selected->id }}"]').trigger('click')
        @endif

        function filterDropdown(input) {
            let dropdown = input.closest('.dropdown')
            let query = input.val().toLowerCase()

            dropdown.find('.dropdown-item').each(function () {
                filter($(this), query)
            })
        }

        function filter(item, query) {
            let name = item.data('text').toLowerCase()

            if (name.includes(query)) {
                item.show()
            } else {
                item.hide()
            }
        }
    })
</script>
