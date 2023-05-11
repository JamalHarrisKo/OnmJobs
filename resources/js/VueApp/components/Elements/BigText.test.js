/**
 * @vitest-environment happy-dom
 */
import {describe, it, expect} from 'vitest'
import {mount} from '@vue/test-utils'
import BigText from './BigText.vue'

describe('bigtext test', ()=>{
    it ('should render', ()=>{
        const wrapper = mount(BigText)
        expect(wrapper.find('p').exists()).toBeTruthy()
    })
})