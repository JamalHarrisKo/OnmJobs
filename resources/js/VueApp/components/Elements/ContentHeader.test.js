/**
 * @vitest-environment happy-dom
 */
import { describe, it, expect } from 'vitest'
import { mount } from '@vue/test-utils'
import ContentHeader from './ContentHeader.vue'

describe('bigtext test', () => {
    it('should render', () => {
        const wrapper = mount(ContentHeader, {
            propsData:{
                textAlignCenter: 'true'
            }
        })
        expect(wrapper.find('h3.textAlignCenter').exists()).toBeTruthy()
    })
})

